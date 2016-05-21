<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->delete();
        $questions = array(            [
            'title' => 'What does the book of Atheism say?',
            'description' => '',
            'user_id' => 1,
            'sub_cat_id' => 1
        ],
            [
                'title' => 'Who won world war 2?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>2
            ],
            [
                'title' => 'What do you think this means? "In the garden of thy heart plant not but the rose of love"?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' => 3
            ],
            [
                'title' => 'Should Hair Transplant look natural and it is affordable?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' => 4
            ],
            [
                'title' => 'Can boys wear black lipstick?',
                'description' => 'Im a 15 year old boy and I want to wear black lip stick. Is this okay and what would look good with?',
                'user_id' => 2,
                'sub_cat_id' => 5
            ],
            [
                'title' => 'Should you be able to wear what ever you want to wear in school?',
                'description' => '',
                'user_id' => 2,
                'sub_cat_id' => 6
            ],
            [
                'title' => 'Boss wanted to FIRE me for not wanted to pick up a shift? Is that threat even LEGAL?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' => 7
            ],
            [
                'title' => 'Should I include these details into my appeal letter for a denied medical insurance claim?',
                'description' => 'I got into a motorcycle accident and required surgery for a broken bone. I recently got a letter from my insurance company saying that my policy does not cover anything that auto-medical insurance could cover. I am still transitioning into the adult life, early 20s (still under my dads medical policy) and had no idea about these different types of insurances. I always thought medical insurance covers medical bills, and auto insurance covers bills related to auto-repairs, etc. As a result, I did not buy any medical coverage with my motorcycle policy.

                                In my state, you are required to purchase auto-medical insurance when buying a CAR insurance policy. This is not true for motorcycles, so when purchasing my motorcycle insurance, I was asked if I wanted to purchase medical insurance, to which I replied: "No thanks, I already have medical insurance."

                                I was not corrected or informed that my medical insurance may not cover medical bills in the event of an accident. Now as a result, I may have to pay a 50,000$ hospital bill. (not including EMS, and follow-up visits to the doc)

                                Basically, should I include these things into my appeal? Do I have other options? Or am I just screwed?',
                'user_id' => 1,
                'sub_cat_id' =>8
            ],
            [
                'title' => 'Is this a valid business tax deduction?',
                'description' => 'I am a self-employed residential electrician. Suppose I take a multi-day job in a distant part of the state, where it would be too far to commute every day to the jobsite. I tow a camping trailer, and stay in that for the duration of the job. For meals, I eat at a local restaurant.

Would those meals be valid business tax deductions?',
                'user_id' => 2,
                'sub_cat_id' =>9
            ],
            [
                'title' => 'Why is my PC turning on and off?',
                'description' => 'I have a PC about 5 years old and it keeps restarting itself every time I try to turn it on and it will repeat the peocess until the computer is unplugged. It doesnt even give itself a chance to start booting up. It will try starting up for about 5 seconds and then shut itself off. And then it will turn back on by itself after another 3 seconds. I have tried unplugging it plugging it back in and while I dont know a lot about computers (the most I can due is name the parts) there doesnt seem to be anything that jumps out as wrong. The power button doesnt even seem to be stuck. Is there anything that I can try to fix this problem without spending a bunch of money getting it fixed?',
                'user_id' => 1,
                'sub_cat_id' =>10
            ],
            [
                'title' => 'Would you theoretically need a LAN card/chipset to use a USB ethernet cable?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>11
            ],
            [
                'title' => 'How to write java program for an arraylist taking 1 to 10 numbers and displaying odd numbers and even numbers seperately?',
                'description' => '',
                'user_id' => 2,
                'sub_cat_id' =>12
            ],
            [
                'title' => 'Describe Justin Bieber in One Word?',
                'description' => '',
                'user_id' => 2,
                'sub_cat_id' =>13
            ],
            [
                'title' => 'Which is your favorite character from all the movies youve seen and why?',
                'description' => '',
                'user_id' => 2,
                'sub_cat_id' =>14
            ],
            [
                'title' => 'Any good rappers you recommend?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>15
            ],
            [
                'title' => 'Anyone have cousins with a huge age difference between them?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>16
            ],
            [
                'title' => 'My friend has a crush on bugs? Help?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>17
            ],
            [
                'title' => 'What are the conditions to get divorced in United States?? Do someone has to go to court for this?',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>18
            ],
            [
                'title' => 'What is bear made up of??',
                'description' => '',
                'user_id' => 2,
                'sub_cat_id' =>19
            ],
            [
                'title' => 'What is the perfect recipe of chicken chawmeen?',
                'description' => '',
                'user_id' => 2,
                'sub_cat_id' =>20
            ],
            [
                'title' => 'How to make a good non alcohlic dirnk with rotten grapes??',
                'description' => '',
                'user_id' => 1,
                'sub_cat_id' =>21
            ]
        );
        DB::table('questions')->insert($questions);
    }
}
