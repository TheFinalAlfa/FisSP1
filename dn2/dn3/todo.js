const newTaskSubmitButton = document.querySelector("#newTaskSubmit")
const newTaskPopover = document.querySelector("#newTaskPopover")
const newTaskContent = document.querySelector("#newTaskContent")
const taskList = document.querySelector("#taskList")
const taskElement = document.querySelector("#hiddenTask")


newTaskPopover.addEventListener("submit", (e) => e.preventDefault())
newTaskSubmitButton.addEventListener("click", () => {
    console.log("Click")
    if (localStorage.getItem("taskNumber")) {
        localStorage.setItem((localStorage.getItem("taskNumber")), newTaskContent.value)
        localStorage.setItem("taskNumber", (parseInt(localStorage.getItem("taskNumber")) + 1).toString())
    }
    else {
        localStorage.setItem("0", newTaskContent.value)
        localStorage.setItem("taskNumber", "1")
        newTask(0)
    }
    newTask(parseInt(parseInt(localStorage.getItem("taskNumber")) - 1))
})


function displayTasks() {
    if (localStorage.getItem("taskNumber"))
    for (let index = 0; index < parseInt(localStorage.getItem("taskNumber")); index++) {
        if (localStorage.getItem((index).toString())) {
            newTask(index)
        }
    }
}

function newTask(number) {
    let node = taskElement.cloneNode(true)
    console.log(localStorage.getItem(number.toString()))
    node.querySelector(".content").textContent = localStorage.getItem((number).toString())
    node.removeAttribute ("hidden")
    node.id = "task" + (number).toString()
    node.querySelector("#taskDelete").addEventListener("click", function() {
        if (localStorage.getItem("tasks")) {
            localStorage.setItem("tasks", (parseInt(localStorage.getItem("tasks")) - 1).toString())
        }
        localStorage.removeItem(this.closest(".task").id.replace("task", ""))
        this.closest(".task").remove()
    })
    node.querySelector("#taskConfirm").addEventListener("click", function() {
        if (localStorage.getItem("compleated")) {
            localStorage.setItem("compleated", (parseInt(localStorage.getItem("copleated")) + 1).toString())
        }
        this.closest(".task").classList.add("bg-success")
        localStorage.setItem(this.closest(".task").id + "success", "true")
    })
    if (localStorage.getItem("task" + number.toString() + "success")) {
        node.classList.add("bg-success")
    }
    taskList.appendChild(node)
}


taskElement.querySelector("#taskConfirm").addEventListener("click", () => {
    if (localStorage.getItem("completed")) {
        localStorage.setItem((localStorage.getItem("completed").toString() + 1).toString())
    } else {
        localStorage.setItem("completed", "1")
    }
})


displayTasks()