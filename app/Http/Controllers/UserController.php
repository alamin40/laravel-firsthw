<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $givenNumber;
    protected $i;
    protected $n;
    protected $d;

    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $sum;
    protected $s;

    protected $pass;
    protected $length;
    protected $data = [];

    protected $firstNumber;
    protected $secondNumber;
    public $operator;






    public function primenumber(Request $request)
    {
        $this->givenNumber = "$request->first_name";

        for($this->i = 2; $this->i < $this->givenNumber; $this->i++) {
            if($this->givenNumber % $this->i == 0){
                $this->n++;
                break;
            }
        }

        if ($this->n == 0){
            $this->d =  $this->givenNumber." is a prime number.";
        } else {
            $this->d =  $this->givenNumber." is not a prime number.";
        }


        return view('home', ['result' => $this->d]);
    }

    public function series(Request $request)
    {
        $this->startingNumber = "$request->starting_number";
        $this->endingNumber = "$request->ending_number";

        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->s .= $this->i.'+';
            $this->sum += $this->i;
        }

            $this->result = rtrim($this->s, '+');
            return view('series', ['result' => $this->result . ' = '. $this->sum]);
    }

    public function passgenerator(Request $request)
    {
        $this->length = "$request->password_length";
        $this->data = ['#', '@', '1', 'A', 'a', ')', '6', '!', '9', '*', '5'];

        for ($this->i = 0; $this->i < $this->length; $this->i++){
            $index = rand(0, 10);
            $this->pass .= $this->data[$index];
        }

        return view('passgenerator', ['result' => $this->pass]);
    }

    public function calculator(Request $request)
    {
        $this->firstNumber = "$request->first_number";
        $this->secondNumber = "$request->second_number";
        $this->operator = "$request->operator";

        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;

            case '-':
                $this->result = $this->sub();
                break;

            case '*':
                $this->result = $this->multiplication();
                break;

            case '/':
                $this->result = $this->devition();
                break;

            case '%':
                $this->result = $this->modulus();
                break;

        }

        return $this->result;


    }

    protected function add()
    {
        $this->result = $this->firstNumber + $this->secondNumber;
        return view('calculator', ['result' => $this->result]);

    }

    protected function sub()
    {
        $this->result = $this->firstNumber - $this->secondNumber;
        return view('calculator', ['result' => $this->result]);
    }
    protected function multiplication()
    {
        $this->result = $this->firstNumber * $this->secondNumber;
        return view('calculator', ['result' => $this->result]);
    }

    protected function devition()
    {
        $this->result = $this->firstNumber / $this->secondNumber;
        return view('calculator', ['result' => $this->result]);
    }

    protected function modulus()
    {
        $this->result = $this->firstNumber % $this->secondNumber;
        return view('calculator', ['result' => $this->result]);
    }
}
