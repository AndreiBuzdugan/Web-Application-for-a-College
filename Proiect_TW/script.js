// Simulare a datelor pentru profesori, studenți și săli de studiu
const professorsData = [
  { name: 'Profesor 1', title: 'Title 1' },
  { name: 'Profesor 2', title: 'Title 2' }
];

const studentsData = [
  { name: 'Student 1', year: 'Year 1' },
  { name: 'Student 2', year: 'Year 2' }
];

const classroomsData = [
  { name: 'CO 003', capacity: 30, type: 'Seminariu', equipment: 'Videoproiector' },
  { name: 'CO 004', capacity: 40, type: 'Laborator', equipment: 'Tablă cu cretă' }
];

// Funcție pentru afișarea informațiilor despre profesori
function displayProfessors() {
  const professorsDiv = document.getElementById('professors');
  professorsDiv.innerHTML = '';
  professorsData.forEach(professor => {
    const professorDiv = document.createElement('div');
    professorDiv.textContent = `Profesor: ${professor.name}, Titlu: ${professor.title}`;
    professorsDiv.appendChild(professorDiv);
  });
}

// Funcție pentru afișarea informațiilor despre studenți
function displayStudents() {
  const studentsDiv = document.getElementById('students');
  studentsDiv.innerHTML = '';
  studentsData.forEach(student => {
    const studentDiv = document.createElement('div');
    studentDiv.textContent = `Student: ${student.name}, An: ${student.year}`;
    studentsDiv.appendChild(studentDiv);
  });
}

// Funcție pentru afișarea informațiilor despre săli de studiu
function displayClassrooms() {
  const classroomsDiv = document.getElementById('classrooms');
  classroomsDiv.innerHTML = '';
  classroomsData.forEach(classroom => {
    const classroomDiv = document.createElement('div');
    classroomDiv.textContent = `Sală: ${classroom.name}, Capacitate: ${classroom.capacity}, Tip: ${classroom.type}, Dotare: ${classroom.equipment}`;
    classroomsDiv.appendChild(classroomDiv);
  });
}

// Afiseaza informatiile la incarcarea paginii
window.onload = function() {
  displayProfessors();
  displayStudents();
  displayClassrooms();
};
