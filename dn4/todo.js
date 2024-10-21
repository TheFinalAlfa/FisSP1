const newTaskSubmitButton = document.querySelector("#newTaskSubmit")
const newTaskPopover = document.querySelector("#newTaskPopover")
const newTaskContent = document.querySelector("#newTaskContent")
const taskList = document.querySelector("#taskList")
const taskElement = document.querySelector("#hiddenTask")
const openTasks = document.querySelector("#odprteNaloge")
const completedTasks = document.querySelector("#zakljuceneNaloge")


newTaskPopover.addEventListener("submit", (e) => e.preventDefault())

newTaskSubmitButton.addEventListener("click", () => {
    // Adding new task here
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
    if (localStorage.getItem("numberOpenTasks")) {
        localStorage.setItem("numberOpenTasks", parseInt(localStorage.getItem("numberOpenTasks")) + 1)
    } else {
        localStorage.setItem("numberOpenTasks", "1")
    }
    updateTaskCounter()
    newTask(parseInt(parseInt(localStorage.getItem("taskNumber")) - 1))
})


function displayTasks() {
    // On startup - ask to display all localy saved tasks
    if (localStorage.getItem("taskNumber"))
    for (let index = 0; index < parseInt(localStorage.getItem("taskNumber")); index++) {
        if (localStorage.getItem((index).toString())) {
            newTask(index)
        }
    }
}

function newTask(number) {
    // Construct task from locally saved memory and adding to document
    let node = taskElement.cloneNode(true)
    console.log(localStorage.getItem(number.toString()))
    node.querySelector(".content").textContent = localStorage.getItem((number).toString())
    node.removeAttribute ("hidden")
    node.id = "task" + (number).toString()

    node.querySelector("#taskDelete").addEventListener("click", function() {
        // Adds delete functionality
        if (localStorage.getItem("tasks")) {
            localStorage.setItem("tasks", (parseInt(localStorage.getItem("tasks")) - 1).toString())
        }
        localStorage.removeItem(this.closest(".task").id.replace("task", ""))
        this.closest(".task").remove()

        if (localStorage.getItem("numberOpenTasks") && parseInt(localStorage.getItem("numberOpenTasks")) >= 1) {
            localStorage.setItem("numberOpenTasks", (parseInt(localStorage.getItem("numberOpenTasks")) - 1))
        } else {
            localStorage.setItem("numberOpenTasks", 0)
        }
        if (localStorage.getItem("numberCompleatedTasks") && parseInt(localStorage.getItem("numberCompleatedTasks")) >= 1) {
            localStorage.setItem("numberCompleatedTasks", (parseInt(localStorage.getItem("numberCompleatedTasks")) - 1))
        } else {
            localStorage.setItem("numberCompleatedTasks", 0)
        }
        updateTaskCounter()
    })

    node.querySelector("#taskConfirm").addEventListener("click", function() {
        // Adds completing functionality
        if (localStorage.getItem("compleated")) {
            localStorage.setItem("compleated", (parseInt(localStorage.getItem("copleated")) + 1).toString())
        }
        this.closest(".task").classList.add("bg-success")
        localStorage.setItem(this.closest(".task").id + "success", "true")
        
        if (localStorage.getItem("numberCompleatedTasks")) {
            localStorage.setItem("numberCompleatedTasks", (parseInt(localStorage.getItem("numberCompleatedTasks")) + 1).toString())
        } else {
            localStorage.setItem("numberCompleatedTasks", 1)
        }
        updateTaskCounter()
    })

    if (localStorage.getItem("task" + number.toString() + "success")) {
        node.classList.add("bg-success")
    }
    taskList.appendChild(node)
}


function updateTaskCounter() {
    if (localStorage.getItem("numberCompleatedTasks")) {
        completedTasks.innerHTML = localStorage.getItem("numberCompleatedTasks")
    }
    if (localStorage.getItem("numberOpenTasks")){
        openTasks.innerHTML = localStorage.getItem("numberOpenTasks")
    }
}



displayTasks()
updateTaskCounter()