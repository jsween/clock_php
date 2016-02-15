<?php

    require_once "src/ClockAngle.php";

    class TestClockAngle extends PHPUnit_Framework_TestCase
    {
        function test_Clock_Angle()
        {
            //Arrange
            $test_Clock_Angle = new ClockAngle;
            $hour = 12;
            $minute = 0;

            //Act
            $result = $test_Clock_Angle->angle($hour, $minute);

            //Assert
            $this->assertEquals(0 , $result);
        }

        function test_Clock_Angle_six()
        {
            //Arrange
            $test_Clock_Angle = new ClockAngle;
            $hour = 6;
            $minute = 0;

            //Act
            $result = $test_Clock_Angle->angle($hour, $minute);

            //Assert
            $this->assertEquals(180 , $result);
        }

        function test_Clock_Angle_min()
        {
            //Arrange
            $test_Clock_Angle = new ClockAngle;
            $hour = 9;
            $minute = 20;

            //Act
            $result = $test_Clock_Angle->angle($hour, $minute);

            //Assert
            $this->assertEquals(160 , $result);
        }
    }

?>
