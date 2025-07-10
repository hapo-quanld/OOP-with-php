<?php

class User{}

class Achievement{
    public function _construct( 
        public string $name,
        public string $description,
        public string $icon,
    )
    {

    }
}

class FirstPostAchievement extends Achievement {
    public function qualifier(User $user) {
        return true;
    }
}

class TalkativeAchievement extends Achievement {
    public function qualifier(User $user) {
        //
    }
}

// $firstPost = new Achievement(
//     'first post',
//     'first description',
//     'first-post.svg'
// );

// die(var_dump($firstPost));