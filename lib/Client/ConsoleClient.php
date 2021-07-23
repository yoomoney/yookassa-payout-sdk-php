<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 "YooMoney", NBСO LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace YooKassaPayout\Client;

use Exception;
use YooKassaPayout\Common\Helpers\GeneratorCsr;
use YooKassaPayout\Model\Organization;

/**
 * Класс для генерации csr запроса и ключей из консоли
 *
 * Class ConsoleClient
 * @package YooKassaPayout\Client
 */
class ConsoleClient
{
    /**
     * Список доступных команд
     * @var array
     */
    private $commands = [
        'get:csr' => [
            'description' => 'генерация запроса на сертификат',
            'command' => 'getCsrCommand',
            'arguments' => [
                'list' => [
                    '-k' => 'имеющийся закрытый ключ',
                    '-c' => 'путь к файлу openssl.conf',
                ],
                'sort' => ['-k', '-c']
            ]
        ],
        'help' => [
            'description' => 'список команд и параметров',
            'command' => 'getHelpCommand',
        ],
    ];

    /**
     * Опросник для заполнения полей организации
     * @var array[]
     */
    private $organizationInfo = [
        'country name' => [
            'default' => 'RU',
            'title' => '',
            'required' => true,
        ],
        'state or province name' => [
            'default' => 'Russia',
            'title' => '',
            'required' => true,
        ],
        'organization name' => [
            'default' => '',
            'title' => 'название организации латинскими буквами',
            'required' => true,
        ],
        'common name' => [
            'default' => '',
            'title' => 'начинается с /business/, после — любое сочетание латинских букв без пробелов',
            'required' => true,
        ],
        'email address' => [
            'default' => '',
            'title' => 'адрес электронной почты',
            'required' => true,
        ],
        'organizational unit name' => [
            'default' => '',
            'title' => '',
            'required' => false,
        ],
        'locality name' => [
            'default' => '',
            'title' => '',
            'required' => false,
        ],
    ];

    /**
     * ConsoleClient constructor.
     * @param array $arguments Аргументы командной строки
     */
    public function __construct($arguments)
    {
        $command = $this->parseArguments($arguments);
        $this->run($command['action'], $command['arguments']);
    }

    /**
     * Запускает работу консольной утилиты
     *
     * @param string $command Команда
     * @param array $arguments Аргументы
     * @return false|mixed Результат выполнения команды
     */
    private function run($command, $arguments)
    {
        $sortedArguments = $this->sortArguments($command, $arguments);
        return call_user_func_array([$this, $this->commands[$command]['command']], $sortedArguments);
    }

    /**
     * Подготавливает аргументы утилиты
     *
     * @param array $arguments Входящие аргументы
     * @return array Обработанные аргументы
     */
    private function parseArguments($arguments)
    {
        $command = [
            'action' => !empty($arguments[1]) ? $arguments[1] : 'help',
            'arguments' => [],
        ];

        if (empty($this->commands[$command['action']])) {
            echo  PHP_EOL .'Команда "'.$command['action'].'" не найдена!' . PHP_EOL;
            $command = ['action' => 'help', 'arguments' => []];
            return $command;
        }

        for ($i=2; $i<count($arguments); $i+=2) {
            if (!empty($arguments[$i]) && !empty($arguments[$i+1])) {
                $command['arguments'][$arguments[$i]] = $arguments[$i+1];
            }
        }

        return $command;
    }

    /**
     * Сортирует аргументы в заданном порядке
     *
     * @param string $command Команда
     * @param array $arguments Входящие аргументы
     * @return array Отсортированные аргументы
     */
    private function sortArguments($command, $arguments)
    {
        if (!empty($this->commands[$command]['arguments']['sort'])) {
            $result = [];
            foreach ($this->commands[$command]['arguments']['sort'] as $key => $val) {
                $result[$key] = isset($arguments[$val]) ? $arguments[$val] : null;
            }
            return $result;
        }

        return [];
    }

    /**
     * Формирует строку вопроса для генератора
     *
     * @param string $paramName Название параметра
     * @param array $options Опции параметра
     * @return string Строка вопроса
     */
    private function buildQuestion($paramName, $options) {
        $question = "$paramName";
        if ($options['title']) {
            $question .= " ({$options['title']})";
        }

        if ($options['default']) {
            $question .= " [{$options['default']}]";
        }

        $question .= $options['required'] ? ': ' : ' (не требуется, нажмите Enter для продолжения): ';

        return $question;
    }

    /**
     * Получает имя метода сеттера по имени параметра
     *
     * @param string $name Имя параметра
     * @return string Строка названия метода
     */
    private function getSetterByParameterName($name) {
        $parts = explode(' ', $name);
        $setterName = 'set';
        foreach ($parts as $part) {
            $setterName .= ucfirst($part);
        }
        return $setterName;
    }

    /**
     * Команда, генерирующая CSR и ключи
     *
     * @param string|null $privateKeyPath Путь к защищенному ключу
     * @param string|null $sslConf Путь к настройкам SSL
     */
    public function getCsrCommand($privateKeyPath=null, $sslConf=null)
    {
        $organization = new Organization();

        foreach ($this->organizationInfo as $paramName => $options) {
            $question = $this->buildQuestion($paramName, $options);

            do {
                print $question;
                $isValid = false;
                $input = trim(fgets(STDIN));

                if (empty($input) && $options['required'] && empty($options['default'])) {
                    print "Поле $paramName — обязательное, введите значение." . PHP_EOL;
                    continue;
                } elseif (empty($input) && !empty($options['default'])) {
                    $answer = $options['default'];
                } else {
                    $answer = $input;
                }

                $setter = $this->getSetterByParameterName($paramName);
                try {
                    $organization->$setter($answer);
                    $isValid = true;
                } catch (Exception $e) {
                    print $e->getMessage() . PHP_EOL;
                }

            } while (!$isValid);
        }

        print "Введите каталог для privateKey и request.csr [".__DIR__."]: ";
        $input = trim(fgets(STDIN));
        $outputDir = empty($input) ? __DIR__ : $input;

        print "Введите пароль для приватного ключа (если не требуется, нажмите Enter для продолжения): ";
        $input = trim(fgets(STDIN));
        $privateKeyPassword = empty($input) ? '' : $input;

        try {
            $generator = new GeneratorCsr($organization, $outputDir, $privateKeyPassword);
            if (!empty($sslConf)) {
                $generator->setConfig(['config' => $sslConf]);
            }
            $result = $generator->generate($privateKeyPath);
        } catch (Exception $e) {
            $result = 'Error: ' . $e->getMessage() . PHP_EOL .
                      'Пожалуйста, повторите заново или используйте другой способ создания CSR';
        }

        echo PHP_EOL . $result . PHP_EOL;
    }

    /**
     * Команда, отображающая справку
     */
    public function getHelpCommand()
    {
        echo PHP_EOL . 'Доступные команды: ' . PHP_EOL . PHP_EOL;
        foreach ($this->commands as $command => $data) {
            $commandLine = $command;
            if (!empty($data['arguments'])) {
                $commandLine .= ' ['.implode('] [', $data['arguments']['sort']).']';
            }
            $commandLine = str_pad($commandLine, 20);
            $commandLine .= '- ' . $data['description'];
            echo $commandLine . PHP_EOL;

            if (!empty($data['arguments']['list'])) {
                echo 'Параметры:' . PHP_EOL;
                foreach ($data['arguments']['list'] as $key => $val) {
                    echo str_pad('    ' . $key, 20) . '- ' .$val . PHP_EOL;
                }
            }

            echo PHP_EOL;
        }
    }
}