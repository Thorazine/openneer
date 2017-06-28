<?php

return [
	'intro' => '<span class="fat">Hello,</span><br>
				My name is <span class="name">Matthijs</span>
				<span class="alt">'.date_diff(date_create("16-07-1981"), date_create("now"))->y.'yo</span>
				and this is my resume',
	'about_me' => 'About me',
	'education' => 'Education',
	'experiences' => 'Experiences',
	'contact' => 'Contact',
	'skills' => 'Skills',
	'languages' => 'Languages',
	'hobbys' => 'Hobbys',

	'level' => [
		'beginner' => 'Beginner',
		'proficient' => 'Proficient',
		'expert' => 'Expert',
		'master' => 'Master',
	],

	'language' => [
		'english' => 'English',
		'dutch' => 'Dutch',
		'german' => 'German',
	],

];