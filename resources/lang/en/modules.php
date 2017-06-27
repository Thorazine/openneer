<?php

return [
	// module entry fields
	'panel' => [
		'info' => '',
		'more' => 'More',
		'maintenance' => 'There is a maintenance window planned from :start_date to :end_date',
	],
	'sites' => [
		'title' => 'Title',
		'robots' => 'Robots',
		'protocol' => 'Protocol',
		'domain' => 'Default domain',
		'domains' => 'Alternative domains',
		'language' => 'Default language',
		'languages' => 'Languages',
		'description' => 'Description',
		'favicon' => 'Favicon',
		'og_title' => 'og:title',
		'og_description' => 'og:description',
		'og_type' => 'og:type',
		'og_image' => 'og:image',
		'browser_cache_time' => 'Browser cache time',
		'keywords' => 'Keywords',
		'publish_at' => 'Publish date',
		'depublish_at' => 'Depublish date',
	],
	'templates' => [
		'refrence' => 'Name',
		'prepend_slug' => 'Slug prefix',
		'view' => 'View',
		'module' => 'Module',
		'template' => 'Template',
		'pages' => 'Pages',
	],
	'field' => [
		'key' => 'Refrence',
		'label' => 'Label',
		'value' => 'Value',
		'default_value' => 'Default value',
		'create_regex' => 'Create regex',
		'edit_regex' => 'Edit Regex',
		'configuration' => 'Configuration',
		'width' => 'Width',
		'height' => 'Height',
		'aspect-ratio' => 'Aspect Ratio',
	],
	'pages' => [
		'template_id' => 'Template',
		'view' => 'View',
		'module' => 'Module',
		'prepend_slug' => 'Root path',
		'slug' => 'Slug',
		'language' => 'Language',
		'title' => 'Title',
		'body' => 'Body',
		'publish_at' => 'Publish date',
		'depublish_at' => 'Depublish date',
		'search_priority' => 'Search priority',
		'no_index' => 'Don\'t index',
	],
	'menu' => [
		'title' => 'Title',
		'max_levels' => 'Menu depth',
	],
	'menu_items' => [
		'page_id' => 'Connected page',
		'external_url' => 'Url',
		'title' => 'Title',
		'description' => 'Description',
		'active' => 'Active',
	],
	'not_found' => [
		'requests' => 'Requests',
		'slug' => 'Url',
		'redirect' => 'Redirect to',
		'referer' => 'Refered by',
	],
	'slugs' => [
		'slug' => 'Url',
		'page_id' => 'Current slug',
	],
	'users' => [
		'roles' => 'Roles',
		'first_name' => 'First name',
		'last_name' => 'Last name', 
		'email' => 'Email',
		'language' => 'Language',
		'permissions' => 'Extra permissions',
		'image' => 'Image',
		'persistences' => 'Persistent sessions',
		'password' => 'Password',
		'password_confirm' => 'Confirm password',
		'password_placeholder' => 'Only fill in if you want to change it',
		'sessions' => 'Sessions',
		'current' => 'Current',
		'country' => 'Country',
		'city' => 'City',
		'os' => 'OS',
		'browser' => 'Browser',
		'device_type' => 'Device type',
		'device' => 'Device',
		'last_used' => 'Last used',
		'remove' => 'Remove',
		'invalidate_session' => 'Invalidate session',
	],
	'roles' => [
		'name' => 'Name',
		'permissions' => 'Permissions',
	],
	'forms' => [
		'fields' => 'Fields',
		'title' => 'Title',
		'button_text' => 'Button text',
		'on_complete_function' => 'On complete function',
		'email_new' => 'Email on new request',
		'email_template' => 'Email template',
		'email_from' => 'Sender of email',
		'email_from_name' => 'Name of sender',
		'email' => 'Entries',
		'email_to' => 'Email recipient(s)',
		'email_reply_to' => 'Reply address',
		'email_reply_to_name' => 'Reply to name',
		'email_subject' => 'Subject of email',
		'email_body' => 'Email body',
		'thank_message' => 'Thank message',
		'on_complete_function_placeholder' => 'No function',
		'download' => 'Download',
		'entries' => 'Entries',
		'download_as' => 'Download as',
		'email_template' => 'Email template',
	],
	'form_fields' => [
		'field_type' => 'Type of field',
		'label' => 'Label',
		'placeholder' => 'Placeholder',
		'key' => 'Key name',
		'default_value' => 'Default value',
		'regex' => 'Regex',
		'width' => 'Width',
		'values' => 'Values',
		'overview' => 'Visible in overview',
		'visible' => 'Visible',
		'invisible' => 'Invisible',
	],
	'form_validations' => [
		'error_message' => 'Error message',
		'language' => 'Language',
		'regex' => 'Regex',
		'label' => 'Label',
	],
	'gallery' => [
		'filetype' => 'File type',
		'title' => 'Title',
		'width' => 'Width',
		'height' => 'Height',
		'image' => 'Image',
	],
	'information' => [
		'sites' => 'Sites',
		'message_type' => 'Message type',
		'title' => 'Title',
		'image' => 'Image',
		'message' => 'Message',
		'start_date' => 'Start date',
		'end_date' => 'End date',
		'publish_at' => 'Publish date',
		'depublish_at' => 'Depublish date',
		'maintenance' => 'Maintenance',
		'news' => 'News',
	],
	'db_logs' => [
		'cms_user_id' => 'User',
		'action' => 'Action',
		'level' => 'Warn level',
		'controller' => 'Controller',
		'request_data' => 'Request data',
	],
];