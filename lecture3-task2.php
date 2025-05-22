<h1> Task 2 lecture 3</h1>
<h3> Monday 19-5-2025 </h3>
<pre>
<h3>
📋 Task: Filter Names by Length
You have an array of names, and you want to print all names that have exactly 5 characters.

Write a function that:

Takes an array of names as a parameter 🎯

Returns a new array containing only the names with 5 characters ✨
</h3><h2>
🔍 Example
Input:
['osama', 'ali', 'mohamed', 'eslam', 'khalid']

Output:
["osama", "eslam"] ✅
</h2>
</pre>

<?php


$names = ['osama', 'ali', 'mohamed', 'eslam', 'khalid'];


function FilterNamesbyLength($names)
{
    $result = [];
    foreach ($names as $name) {
        if (strlen($name) === 5) {
            $result[] = $name;
        }
    }
    return $result;
}

$names = ['osama', 'ali', 'mohamed', 'eslam', 'khalid'];

print_r(FilterNamesbyLength($names));
