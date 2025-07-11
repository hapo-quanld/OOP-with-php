<?php

interface CanBeLiked {
    public function like();
    public function isLiked();
}

class Comment implements CanBeLiked {
    public function like(){
        echo 'like the comment';
    }

    public function isLiked(){
        return false;
    }
}

class Post implements CanBeLiked {
    public function like(){
        echo 'Like the post';
    }

    public function isLiked(){
        return false;
    }
}

class Thread implements CanBeLiked {
    public function like() {
        echo 'like the thread';
    }

    public function isLiked(){
        return false;
    }
}

class PerformLikeAction {
    public function handle(CanBeLiked $model){
        if ($model->isliked()){
            return;
        }
        
        $model->like();
    }
}

(new PerformLikeAction())->handle(new Thread);