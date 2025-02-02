This repository contains a PHP function with a subtle bug related to null value handling. The `foo` function attempts to add two variables, but it only explicitly checks if *both* variables are null, not if either one is. This can lead to unexpected results or errors when one of the variables is null.

The `bug.php` file demonstrates the problematic function, and `bugSolution.php` provides a corrected version that robustly handles null values.

The bug is demonstrated by running the scripts and observing the output.  The solution provides a more comprehensive null check and is more resilient. 