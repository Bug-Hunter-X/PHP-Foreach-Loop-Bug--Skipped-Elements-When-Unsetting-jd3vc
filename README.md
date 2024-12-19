# PHP Foreach Loop Bug: Skipped Elements When Unsetting
This repository demonstrates a common but subtle bug in PHP related to foreach loops and array modification.  When using unset() inside a foreach loop to remove elements from an array, unexpected behavior can occur because the array's internal indexing changes during the iteration process. 

The `bug.php` file shows the buggy code. `bugSolution.php` provides a corrected version. The README explains the issue and its solution.