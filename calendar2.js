function generateCalendar(year) {
  const months = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  for (let month = 0; month < 12; month++) {
    console.log(`\n\n${months[month]} ${year}`);
    console.log("Su Mo Tu We Th Fr Sa");

    // Get the first day of the month (0=Sunday, 6=Saturday)
    const firstDay = new Date(year, month, 1).getDay();
    // Get the number of days in the month
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    let calendar = "";

    // Add padding spaces for days before the first day
    for (let i = 0; i < firstDay; i++) {
      calendar += "   ";
    }

    // Fill in the days of the month
    for (let day = 1; day <= daysInMonth; day++) {
      calendar += day < 10 ? ` ${day} ` : `${day} `;
      // Break line at Saturday
      if ((day + firstDay) % 7 === 0) calendar += "\n";
    }

    console.log(calendar);
  }
}

// Ask user for input
const yearInput = prompt("Enter the year to generate the calendar for:");
const year = parseInt(yearInput);

if (!isNaN(year) && year > 0) {
  generateCalendar(year);
} else {
  console.log("Please enter a valid positive year.");
}