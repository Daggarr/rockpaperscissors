<?php

$choices = ["rock","paper","scissors"];


while (true)
{
    $pcChoice = $choices[rand(0,2)];

    $playerChoice = readline("Enter your choice (rock, paper, scissors): ");

    if (!in_array($playerChoice,$choices))
    {
        echo "Invalid choice!\n";
        exit;
    }

    echo "PC chose $pcChoice\n";

    if ($pcChoice === "paper")
    {
        switch ($playerChoice)
        {
            case "paper";
                echo "It's a tie!\n";
                break;
            case "rock":
                echo "PC wins!\n";
                break;
            case "scissors":
                echo "Player wins!\n";
                break;
        }
    }
    elseif ($pcChoice === "rock")
    {
        switch ($playerChoice)
        {
            case "paper":
                echo "Player wins!\n";
                break;
            case "rock":
                echo "It's a tie!\n";
                break;
            case "scissors":
                echo "PC wins!\n";
                break;
        }
    }
    elseif ($pcChoice === "scissors")
    {
        switch ($playerChoice)
        {
            case "paper":
                echo "PC wins!\n";
                break;
            case "rock":
                echo "Player wins!\n";
                break;
            case "scissors":
                echo "It's a tie!\n";
                break;
        }
    }

    $playAgain = readline("Play again? (yes, no) ");
    if ($playAgain !== "yes")
    {
        exit;
    }
}