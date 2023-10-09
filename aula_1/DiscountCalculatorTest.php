<?php




class DiscountCalculatorTest
{


    public function shoulApply_WhenValueIsAboveTheMinimun()
    {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithDicount = $discountCalculator->apply($totalValue);

        $expectrdValue = 110;
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