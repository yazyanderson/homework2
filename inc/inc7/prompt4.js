const catalog = [
    { title: "Stranger Things", region: "US", matchPct: 97 },
    { title: "Dark", region: "DE", matchPct: 89 },
    { title: "Squid Game", region: "US", matchPct: 94 },
    { title: "La Casa de Papel", region: "ES", matchPct: 76 },
    { title: "Mindhunter", region: "US", matchPct: 91 },
  ];
  
  const myRegion = "US";
  
  const results = catalog
    .filter(show => show.region === myRegion)
    .sort((a, b) => b.matchPct - a.matchPct);
  
  console.log(results);