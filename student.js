const addStudentBtn = document.getElementById("addStudentBtn");

const studentList = [];

addStudentBtn.addEventListener('click',(e)=>{
    const studentName = document.getElementById("studentName").value.trim();
    const subjectChosen = document.getElementById("subjectChosen").value.trim();
    const studentMark = Number(document.getElementById("studentMark").value.trim());

    let anotherStudentList = {
        name: studentName, 
        subject: subjectChosen, 
        marks: studentMark};
    studentList.unshift(anotherStudentList);

    const studentTable = document.getElementById("studentTable");
    const row = studentTable.insertRow();
    row.innerHTML = `
    <td>${studentName}</td>
    <td>${subjectChosen}</td>
    <td>${studentMark}</td>
    `;

    document.getElementById("studentData").value = JSON.stringify(studentList);

    document.getElementById("studentName").value = "";
    document.getElementById("subjectChosen").value = "";
    document.getElementById("studentMark").value = "";
});

