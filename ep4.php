<?php

class User{

}

class Newsletter {
    public function __construct(public NewsLetterProvider $provider){

    }

    public function subscribe(User $user, NewsLetterProvider $provider) {

        $this->provider->addToList('default', $user->email);

        $user->update(['subscribed'=>true]);
        return true;
    }
}

interface NewsLetterProvider {
    public function addToList(string $list, string $email):void;
}

class CampaignMonitor implements NewsLetterProvider {
    public function addToList(string $list, string $email):void {
        //interact with the campain monitor
        $cm = new CampaignMonitorAPI();
        $cm->addApiKey("pein");
        $list = $cm->lists->find($list);
        $list->addToList($email);
    }
}

class PostMarkMonitor implements NewsLetterProvider {
    public function addToList(string $list, string $email):void {
        //interact with the campain monitor
        $cm = new PostMarkAPI('pein');
        $list = $cm->addToDefaultList($email);
        $list->addToList($email);
    }
}

$newsletter = new Newsletter(
    new PostMarkMonitor
);

$newsletter->subscribe(new User);