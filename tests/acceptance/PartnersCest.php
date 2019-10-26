<?php 

class PartnersCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function goole_analytic(AcceptanceTester $I)
    {
    	$domain = '/';
        $ga_code     = 'UA-XXXXXXXX-X';
        
        $I->wantToTest( 'GA code '.$ga_code.' if it\'s well inserted in '.$domain );
        $I->amOnPage( $domain );
        $I->seeInSource($ga_code);
    }
}
