function getTopScores(scores, threshold) {
    const topScores = scores.filter(score => score >= threshold);

    topScores.sort((a, b) => b - a);

    return topScores;
}

console.log(getTopScores([85, 92, 55, 78, 45, 96], 80));
console.log(getTopScores([70, 65, 80, 55, 90], 70));