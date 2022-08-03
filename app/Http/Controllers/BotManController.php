<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'hi') {
                $this->askName($botman);
            }elseif($message == 'who are you?'){
                $botman->reply('I am ohome, How can I help you?');
            }elseif($message == 'I want Room'){
                $botman->reply('Go to All Property Section- <a href = "http://127.0.0.1:8000/all_rooms" target="blank"> click here<a/>');
            }elseif($message == 'service'){
                $botman->reply('I am ohome, I provide online rental room in your locality');
            }elseif($message == 'who made you?'){
                $botman->reply('I am made by Pradipta and Abhijit with the guidence of respected HOD- Mr.Adul Rahim');
            }elseif($message == 'Who made you?'){
                $botman->reply('I am made by Pradipta and Abhijit with the guidence of respected HOD- Mr.Adul Rahim');
            }elseif($message == 'need room'){
                $botman->reply('you can search room or go to - <a href = "http://127.0.0.1:8000/all_rooms" target="blank"> rooms<a/>');}
            // }elseif($message == 'who r u?'){
            //     $botman->reply('I am ohome');
            // }elseif($message == 'who r u?'){
            //     $botman->reply('I am ohome');
            // }elseif($message == 'who r u?'){
            //     $botman->reply('I am ohome');
            // }
            else{
                $botman->reply("write 'hi' for testing...");
            }
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
    }

  
}
