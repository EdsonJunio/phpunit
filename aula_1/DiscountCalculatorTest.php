<?php




class DiscountCalculatorTest
{


    public function shoulApply_WhenValueIsAboveTheMinimunTest()
    {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithDicount = $discountCalculator->apply($totalValue);

        $expectrdValue = 110;
        $this->assertEquals($expectrdValue, $totalWithDicount);

    }

    public function shoulNotApply_WhenValueIsBellowTheMinimunTest()
    {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 90;
        $totalWithDicount = $discountCalculator->apply($totalValue);

        $expectrdValue = 90;
        $this->assertEquals($expectrdValue, $totalWithDicount);

    }

    public function assertEquals($expectrdValue, $actualValue)
    {

        if ($expectrdValue !== $actualValue) {
            $message = 'Expected: ' . $expectrdValue . ' but got ' . $actualValue;
            throw new \Exception($message);
        }

        echo "Test passed! \n";
    }


}