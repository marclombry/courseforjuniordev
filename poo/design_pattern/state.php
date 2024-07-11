<?php 
/**
 * The State pattern is a behavioral design pattern that allows an object to change its behavior when it changes its internal state.
 * This is done by encapsulating each possible state of the object in a separate class, and allowing the object to change state classes 
 * on the fly.
 */
interface State
{
    public function handle(): void;
}

class NewState implements State
{
    public function handle(): void
    {
        // code ...
    }
}

class InPreparationState implements State
{
    public function handle(): void
    {
        // code ...
    }
}

class ShippedState implements State
{
    public function handle(): void
    {
        // code ...
    }
}