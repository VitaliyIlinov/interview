<?php

interface Interviewer
{
    public function askQuestions();
}

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Спрашивает про шаблоны проектирования!';
    }
}

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'Спрашивает о работе с сообществом';
    }
}

//Теперь создадим нашего HiringManager:
abstract class HiringManager
{
    // Фабричный метод
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}

//И теперь любой дочерний класс может расширять его и предоставлять необходимого интервьюера:
class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}

class MarketingManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}

//Пример использования:
$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Вывод: Спрашивает о шаблонах проектирования!

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Вывод: Спрашивает о работе с сообществом