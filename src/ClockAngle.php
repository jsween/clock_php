<?php
  class ClockAngle
  {
    function angle($hourinput, $minuteinput)
    {
        if ($hourinput == 12) {
            $hourinput = 0;
        }

        $hoursangle = ($hourinput * 60 + $minuteinput)/ 60 * 360 / 12;

        $minuteangle = $minuteinput * 360 / 60;

        $angle = abs($minuteangle - $hoursangle);

        if ($angle > 180)
        {
            $angle = 360 - $angle;
        }

        return $angle;
      }
  }

?>
