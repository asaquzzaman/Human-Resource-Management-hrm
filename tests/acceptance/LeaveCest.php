<?php 

use \Codeception\Util\Locator;
use \Codeception\Util\ActionSequence;
use \Page\Acceptance\Leave;

class LeaveCest
{
    public function _before(AcceptanceTester $I, \Step\Acceptance\Login $login)
    {
        
        $login->asAdmin();
        
    }



    //tests
    public function LeaveTest(AcceptanceTester $I)
    {
        
        (new Leave($I) )->start();	
    	
    }

}