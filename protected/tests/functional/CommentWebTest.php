<?php

class CommentWebTest extends WebTestCase
{
	/**
	 * We use both 'Post' and 'Comment' fixtures.
	 * @see CWebTestCase::fixtures
	 */
	public $fixtures = array(
		'posts' => 'Post',
		'comments' => 'Comment',
	);

	public function testCreate()
	{
		$this->url('post/1/xyz');

		$element = $this->byCssSelector('div#content .post .title');

		$this->assertEquals('test post 1', $element->text()); 

		//$this->seeResponseContains($this->posts['sample1']['title']);

	    // verify the sample post title exists
	    //$this->assertTextPresent($this->posts['sample1']['title']);
	    //$this->assertElementPresent("name=Comment[author]");

	    // verify validation errors
	    //$this->clickAndWait("//input[@value='Submit']");
	    //$this->assertTextPresent('Name cannot be blank.');
	    //$this->assertTextPresent('Email cannot be blank.');
	    //$this->assertTextPresent('Comment cannot be blank.');

		// verify commenting is successful
		//$comment="comment 1";
		//$this->type('name=Comment[author]','me');
		//$this->type('name=Comment[email]','me@example.com');
		//$this->type('name=Comment[content]',$comment);
	    //$this->clickAndWait("//input[@value='Submit']");
	    //$this->assertTextPresent('Thank you for your comment');
	}
}