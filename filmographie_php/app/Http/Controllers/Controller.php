<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
class MovieController extends Controller{
    private function getMovies(){
//array avec 7 films cooooool
        return [
            ['id' => 0, 'title' => 'The Bride', 'content' => 'Here comes the mother f*%#ing bride!

A lonely Frankenstein travels to 1930s Chicago to ask groundbreaking scientist Dr. Euphronious to create a companion for him. The two revive a murdered young woman and The Bride is born. But what ensues is beyond what either of them imagined.'],
            ['id' => 1, 'title' => 'Hoppers', 'content' => 'Act natural.

Scientists have discovered how to ‘hop’ human consciousness into lifelike robotic animals, allowing people to communicate with animals as animals. Animal lover Mabel seizes an opportunity to use the technology, uncovering mysteries within the animal world beyond anything she could have imagined.'],
            ['id' => 2, 'title' => 'Sinners', 'content' => 'Dance with the devil.

Trying to leave their troubled lives behind, twin brothers return to their hometown to start again, only to discover that an even greater evil is waiting to welcome them back.
'],
            ['id' => 3, 'title' => 'Hamnet', 'content' => 'Keep your heart open.

The powerful story of love and loss that inspired the creation of Shakespeare’s timeless masterpiece, Hamlet.
'], 
['id' => 4, 'title' => 'Marty Supreme', 'content' => 'Dream big.

Marty Mauser, a young man with a dream no one respects, goes to hell and back in pursuit of greatness.
'],
            ['id' => 5, 'title' => 'Amélie', 'content' => 'She’ll change your life.

At a tiny Parisian café, the adorable yet painfully shy Amélie accidentally discovers a gift for helping others. Soon Amelie is spending her days as a matchmaker, guardian angel, and all-around do-gooder. But when she bumps into a handsome stranger, will she find the courage to become the star of her very own love story?
'],
            ['id' => 6, 'title' => 'La Haine', 'content' => 'How far you fall doesn’t matter, it’s how you land…

After a chaotic night of rioting in a marginal suburb of Paris, three young friends, Vinz, Hubert and Saïd, wander around unoccupied waiting for news about the state of health of a mutual friend who has been seriously injured when confronting the police.
']
        ];
    }

    public function index(){
        return view('movies.index', ['movies' => $this->getMovies()]);
    }
}
?>