<h1> Task 1 lecture 3</h1>
<h3> Monday 19-5-2025 </h3>
<pre>
<h3>
One day, three best friends — Petya 👦, Vasya 👦, and Tonya 👧 — decided to form a team 🤝 and participate in programming contests 💻.

Participants are usually given several problems 📝 during contests. Long before the start, the friends agreed:

They will implement a problem only if at least two of them are confident ✔️ about the solution.
Otherwise, they won’t write the solution ❌ for that problem.

This contest offers n problems. For each problem, we know which friends are sure about its solution ✅ or not ❎.

Your task: help the friends find the number of problems they will solve 🔢.
</h3>

<h2>
Example Input:
1 1 0
1 1 1
1 0 0
</h2>
</pre>

<?php

function countSolvableProblems($problems)
{
    $count = 0;

    foreach ($problems as $problem) {
        $a = $problem[0];
        $b = $problem[1];
        $c = $problem[2];
        $sum = $a + $b + $c;
        if ($sum >= 2) {
            $count++;
        }
    }
    return $count;
}

$problems = [
    [1, 1, 0],
    [1, 1, 1],
    [1, 0, 0]
];

echo "<h3> your count Solvable Problems is : " . countSolvableProblems($problems) . "</h3>";
