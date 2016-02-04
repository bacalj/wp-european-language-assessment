<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_569d3659ae755',
	'title' => 'European Language Portfolio',
	'fields' => array (
		array (
			'key' => 'field_56aad985b6849',
			'label' => 'Name',
			'name' => 'name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56aad9a4b684a',
			'label' => 'Language',
			'name' => 'language',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_569d367fee643',
			'label' => 'Listening',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_569d36baee644',
			'label' => 'Listening Scores',
			'name' => 'listening_scores',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_56a3bc2894cb9',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Listening Score',
			'sub_fields' => array (
				array (
					'key' => 'field_56a3bc2894cb9',
					'label' => 'Listening Score Date',
					'name' => 'listening_score_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_569d9758e30f8',
					'label' => 'Display this score on page (you can check more than one)',
					'name' => 'show_on_front',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
				array (
					'key' => 'field_569d42ecee645',
					'label' => 'Listening Score',
					'name' => 'listening_score',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'<b>A1</b>	I can recognize familiar words an very basic phrases concerning myself, my family and immediate concrete surroundings when people speak slowly and clearly.<hr>' => '<b>A1</b>	I can recognize familiar words an very basic phrases concerning myself, my family and immediate concrete surroundings when people speak slowly and clearly.<hr>',
						'<b>A2</b>	I can understand phrases and the highest frequency vocabulary related to areas of most immediate personal relevance (e.g. very basic personal and family information, shopping, local geography, employment). I can catch the main point in short, clear, simple messages and announcements.<hr>' => '<b>A2</b>	I can understand phrases and the highest frequency vocabulary related to areas of most immediate personal relevance (e.g. very basic personal and family information, shopping, local geography, employment). I can catch the main point in short, clear, simple messages and announcements.<hr>',
						'<b>B1</b>	I can understand the main points of clear standard speech on familiar matters regularly encountered in work, school, leisure, etc. I can understand the main point of many radio or TV programmes on current affairs or topics of personal or professional interest when the delivery is relatively slow and clear.<hr>' => '<b>B1</b>	I can understand the main points of clear standard speech on familiar matters regularly encountered in work, school, leisure, etc. I can understand the main point of many radio or TV programmes on current affairs or topics of personal or professional interest when the delivery is relatively slow and clear.<hr>',
						'<b>B2</b>	I can understand extended speech and lectures and follow even complex lines of argument provided the topic is reasonably familiar. I can understand most TV news and current affairs programmes. I can understand the majority of films in standard dialect.<hr>' => '<b>B2</b>	I can understand extended speech and lectures and follow even complex lines of argument provided the topic is reasonably familiar. I can understand most TV news and current affairs programmes. I can understand the majority of films in standard dialect.<hr>',
						'<b>C1</b>	I can understand extended speech even when it is not clearly structured and when relationships are only implied and not signalled explicitly. I can understand television programmes and films without too much effort.<hr>' => '<b>C1</b>	I can understand extended speech even when it is not clearly structured and when relationships are only implied and not signalled explicitly. I can understand television programmes and films without too much effort.<hr>',
						'<b>C2</b>	I have no difficulty in understanding any kind of spoken language, whether live or broadcast, even when delivered at fast native speed, provided I have some time to get familiar with the accent.<hr>' => '<b>C2</b>	I have no difficulty in understanding any kind of spoken language, whether live or broadcast, even when delivered at fast native speed, provided I have some time to get familiar with the accent.<hr>',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
				),
				array (
					'key' => 'field_569d442895779',
					'label' => 'Listening Score Additional Text and Images',
					'name' => 'listening_score_additional_text_and_images',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_56a27ce8ee3cf',
			'label' => 'Reading',
			'name' => '_copy',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_56b3774b37011',
			'label' => 'Reading Scores',
			'name' => 'reading_scores',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_56b3774b37012',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Reading Score',
			'sub_fields' => array (
				array (
					'key' => 'field_56b3774b37012',
					'label' => 'Reading Score Date',
					'name' => 'reading_score_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_56b3774b37013',
					'label' => 'Display this score on page (you can check more than one)',
					'name' => 'show_on_front',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
				array (
					'key' => 'field_56b3774b37014',
					'label' => 'Reading Score',
					'name' => 'reading_score',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'<b>A1</b>	I can understand familiar names, words and very simple sentences, for example on notices and posters or in catalogues<hr>' => '<b>A1</b>	I can understand familiar names, words and very simple sentences, for example on notices and posters or in catalogues<hr>',
						'<b>A2</b>	I can read very short, simple texts. I can find specific, predictable information in simple everyday material such as advertisements, prospectuses, menus and timetables and I can understand short simple personal letters.<hr>' => '<b>A2</b>	I can read very short, simple texts. I can find specific, predictable information in simple everyday material such as advertisements, prospectuses, menus and timetables and I can understand short simple personal letters.<hr>',
						'<b>B1</b>	I can understand texts that consist mainly of high frequency everyday or job-related language. I can understand the description of events, feelings and wishes in personal letters.<hr>' => '<b>B1</b>	I can understand texts that consist mainly of high frequency everyday or job-related language. I can understand the description of events, feelings and wishes in personal letters.<hr>',
						'<b>B2</b>	I can read articles and reports concerned with contemporary problems in which the writers adopt particular attitudes or viewpoints. I can understand contemporary literary prose.<hr>' => '<b>B2</b>	I can read articles and reports concerned with contemporary problems in which the writers adopt particular attitudes or viewpoints. I can understand contemporary literary prose.<hr>',
						'<b>C1</b>	I can understand long and complex factual and literary texts, appreciating distinctions of style. I can understand specialised articles and longer technical instructions, even when they do not relate to my field.<hr>' => '<b>C1</b>	I can understand long and complex factual and literary texts, appreciating distinctions of style. I can understand specialised articles and longer technical instructions, even when they do not relate to my field.<hr>',
						'<b>C2</b>	I can read with ease virtually all forms of the written language, including abstract, structurally or linguistically complex texts such as manuals, specialised articles and literary works.<hr>' => '<b>C2</b>	I can read with ease virtually all forms of the written language, including abstract, structurally or linguistically complex texts such as manuals, specialised articles and literary works.<hr>',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
				),
				array (
					'key' => 'field_56b3774b37015',
					'label' => 'Reading Score Additional Text and Images',
					'name' => 'reading_score_additional_text_and_images',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_56a27d474675f',
			'label' => 'Spoken Interaction',
			'name' => '_copy',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_56b3777b37016',
			'label' => 'Spoken Interaction Scores',
			'name' => 'spokeninteraction_scores',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Spoken Interaction Score',
			'sub_fields' => array (
				array (
					'key' => 'field_56b3777b37017',
					'label' => 'Spoken Interaction Score Date',
					'name' => 'spokeninteraction_score_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_56b3777b37018',
					'label' => 'Display this score on page (you can check more than one)',
					'name' => 'show_on_front',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
				array (
					'key' => 'field_56b3777b37019',
					'label' => 'Spoken Interaction Score',
					'name' => 'spokeninteraction_score',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'<b>A1</b>	I can interact in a simple way provided the other person is prepared to repeat or rephrase things at a slower rate of speech and help me formulate what I\'m trying to say. I can ask and answer simple questions in areas of immediate need or on very familiar topics.<hr>' => '<b>A1</b>	I can interact in a simple way provided the other person is prepared to repeat or rephrase things at a slower rate of speech and help me formulate what I\'m trying to say. I can ask and answer simple questions in areas of immediate need or on very familiar topics.<hr>',
						'<b>A2</b>	I can communicate in simple and routine tasks requiring a simple and direct exchange of information on familiar topics and activities. I can handle very short social exchanges, even though I can\'t usually understand enough to keep the conversation going myself.<hr>' => '<b>A2</b>	I can communicate in simple and routine tasks requiring a simple and direct exchange of information on familiar topics and activities. I can handle very short social exchanges, even though I can\'t usually understand enough to keep the conversation going myself.<hr>',
						'<b>B1</b>	I can deal with most situations likely to arise whilst travelling in an area where the language is spoken. I can enter unprepared into conversation on topics that are familiar, of personal interest or pertinent to everyday life (e.g. family, hobbies, work, travel and current events).<hr>' => '<b>B1</b>	I can deal with most situations likely to arise whilst travelling in an area where the language is spoken. I can enter unprepared into conversation on topics that are familiar, of personal interest or pertinent to everyday life (e.g. family, hobbies, work, travel and current events).<hr>',
						'<b>B2</b>	I can interact with a degree of fluency and spontaneity that makes regular interaction with native speakers quite possible. I can take an active part in discussion in familiar contexts, accounting for and sustaining my views.<hr>' => '<b>B2</b>	I can interact with a degree of fluency and spontaneity that makes regular interaction with native speakers quite possible. I can take an active part in discussion in familiar contexts, accounting for and sustaining my views.<hr>',
						'<b>C1</b>	I can express myself fluently and spontaneously without much obvious searching for expressions. I can use language flexibly and effectively for social and professional purposes. I can formulate ideas and opinions with precision and relate my contribution skilfully to those of other speakers.<hr>' => '<b>C1</b>	I can express myself fluently and spontaneously without much obvious searching for expressions. I can use language flexibly and effectively for social and professional purposes. I can formulate ideas and opinions with precision and relate my contribution skilfully to those of other speakers.<hr>',
						'<b>C2</b>	I can take part effortlessly in any conversation or discussion and have a good familiarity with idiomatic expressions and colloquialisms. I can express myself fluently and convey finer shades of meaning precisely. If I do have a problem I can backtrack and restructure around the difficulty so smoothly that other people are hardly aware of it.<hr>' => '<b>C2</b>	I can take part effortlessly in any conversation or discussion and have a good familiarity with idiomatic expressions and colloquialisms. I can express myself fluently and convey finer shades of meaning precisely. If I do have a problem I can backtrack and restructure around the difficulty so smoothly that other people are hardly aware of it.<hr>',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
				),
				array (
					'key' => 'field_56b3777b3701a',
					'label' => 'Spoken Interaction Score Additional Text and Images',
					'name' => 'spokeninteraction_score_additional_text_and_images',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_56a27d5d46760',
			'label' => 'Spoken Production',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_56b377ca98e6d',
			'label' => 'Spoken Production Scores',
			'name' => 'spokenproduction_scores',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Spoken Production Score',
			'sub_fields' => array (
				array (
					'key' => 'field_56b377ca98e6e',
					'label' => 'Spoken Production Score Date',
					'name' => 'spokenproduction_score_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_56b377ca98e6f',
					'label' => 'Display this score on page (you can check more than one)',
					'name' => 'show_on_front',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
				array (
					'key' => 'field_56b377ca98e70',
					'label' => 'Spoken Production Score',
					'name' => 'spokenproduction_score',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'<b>A1</b>	I can use simple phrases and sentences to describe where I live and people I know.<hr>' => '<b>A1</b>	I can use simple phrases and sentences to describe where I live and people I know.<hr>',
						'<b>A2</b>	I can use a series of phrases and sentences to describe in simple terms my family and other people, living conditions, my educational background and my present or most recent job.<hr>' => '<b>A2</b>	I can use a series of phrases and sentences to describe in simple terms my family and other people, living conditions, my educational background and my present or most recent job.<hr>',
						'<b>B1</b>	I can connect phrases in a simple way in order to describe experiences and events, my dreams, hopes and ambitions. I can briefly give reasons and explanations for opinions and plans. I can narrate a story or relate the plot of a book or film and describe my reactions.<hr>' => '<b>B1</b>	I can connect phrases in a simple way in order to describe experiences and events, my dreams, hopes and ambitions. I can briefly give reasons and explanations for opinions and plans. I can narrate a story or relate the plot of a book or film and describe my reactions.<hr>',
						'<b>B2</b>	I can present clear, detailed descriptions on a wide range of subjects related to my field of interest. I can explain a viewpoint on a topical issue giving the advantages and disadvantages of various options.<hr>' => '<b>B2</b>	I can present clear, detailed descriptions on a wide range of subjects related to my field of interest. I can explain a viewpoint on a topical issue giving the advantages and disadvantages of various options.<hr>',
						'<b>C1</b>	I can present clear, detailed descriptions of complex subjects integrating subthemes, developing particular points and rounding off with an appropriate conclusion.<hr>' => '<b>C1</b>	I can present clear, detailed descriptions of complex subjects integrating subthemes, developing particular points and rounding off with an appropriate conclusion.<hr>',
						'<b>C2</b>	I can present a clear, smoothly-flowing description or argument in a style appropriate to the context and with an effective logical structure which helps the recipient to notice and remember significant points.<hr>' => '<b>C2</b>	I can present a clear, smoothly-flowing description or argument in a style appropriate to the context and with an effective logical structure which helps the recipient to notice and remember significant points.<hr>',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
				),
				array (
					'key' => 'field_56b377ca98e71',
					'label' => 'Spoken Production Score Additional Text and Images',
					'name' => 'spokenproduction_score_additional_text_and_images',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_56a27d6946761',
			'label' => 'Writing',
			'name' => '_copy',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_56b37809afb00',
			'label' => 'Writing Scores',
			'name' => 'writing_scores',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Writing Score',
			'sub_fields' => array (
				array (
					'key' => 'field_56b37809afb01',
					'label' => 'Writing Score Date',
					'name' => 'writing_score_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_56b37809afb02',
					'label' => 'Display this score on page (you can check more than one)',
					'name' => 'show_on_front',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
				array (
					'key' => 'field_56b37809afb03',
					'label' => 'Writing Score',
					'name' => 'writing_score',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 38,
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'<b>A1</b>	I can write a short, simple postcard, for example sending holiday greetings. I can fill in forms with personal details, for example entering my name, nationality and address on a hotel registration form.<hr>' => '<b>A1</b>	I can write a short, simple postcard, for example sending holiday greetings. I can fill in forms with personal details, for example entering my name, nationality and address on a hotel registration form.<hr>',
						'<b>A2</b>	I can write short, simple notes and messages. I can write a very simple personal letter, for example thanking someone for something.<hr>' => '<b>A2</b>	I can write short, simple notes and messages. I can write a very simple personal letter, for example thanking someone for something.<hr>',
						'<b>B1</b>	I can write simple connected text on topics which are familiar or of personal interest. I can write personal letters describing experiences and impressions.<hr>' => '<b>B1</b>	I can write simple connected text on topics which are familiar or of personal interest. I can write personal letters describing experiences and impressions.<hr>',
						'<b>B2</b>	I can write clear, detailed text on a wide range of subjects related to my interests. I can write an essay or report, passing on information or giving reasons in support of or against a particular point of view. I can write letters highlighting the personal significance of events and experiences.<hr>' => '<b>B2</b>	I can write clear, detailed text on a wide range of subjects related to my interests. I can write an essay or report, passing on information or giving reasons in support of or against a particular point of view. I can write letters highlighting the personal significance of events and experiences.<hr>',
						'<b>C1</b>	I can express myself in clear, wellstructured text, expressing points of view at some length. I can write about complex subjects in a letter, an essay or a report, underlining what I consider to be the salient issues. I can select a style appropriate to the reader in mind.<hr>' => '<b>C1</b>	I can express myself in clear, wellstructured text, expressing points of view at some length. I can write about complex subjects in a letter, an essay or a report, underlining what I consider to be the salient issues. I can select a style appropriate to the reader in mind.<hr>',
						'<b>C2</b>	I can write clear, smoothly-flowing text in an appropriate style. I can write complex letters, reports or articles which present a case with an effective logical structure which helps the recipient to notice and remember significant points. I can write summaries and reviews of professional or literary works.<hr>' => '<b>C2</b>	I can write clear, smoothly-flowing text in an appropriate style. I can write complex letters, reports or articles which present a case with an effective logical structure which helps the recipient to notice and remember significant points. I can write summaries and reviews of professional or literary works.<hr>',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
				),
				array (
					'key' => 'field_56b37809afb04',
					'label' => 'Writing Score Additional Text and Images',
					'name' => 'writing_score_additional_text_and_images',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 62,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:european-language-portfolio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'comments',
		4 => 'revisions',
		5 => 'format',
		6 => 'page_attributes',
		7 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;
