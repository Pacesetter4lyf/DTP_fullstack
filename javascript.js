// Function to handle adding items to the dynamic list, skipping duplicates
function addItemToDynamicList(itemText) {
    const dynamicList = document.querySelector(".added-items");
    // Check if the item is already in the list
    const listItems = dynamicList.querySelectorAll("li");
    for (const listItem of listItems) {
      if (listItem.textContent === itemText) {
        return; // Item already exists, so skip adding it
      }
    }
    const listItem = document.createElement("li");
    listItem.textContent = itemText;
    dynamicList.appendChild(listItem);
  }
  
  // Function to remove an item from the dynamic list
  function removeItemFromDynamicList(itemText) {
    const dynamicList = document.querySelector(".added-items");
    const listItems = dynamicList.querySelectorAll("li");
  
    for (const listItem of listItems) {
      if (listItem.textContent === itemText) {
        dynamicList.removeChild(listItem);
        break; // Stop after removing the first matching item
      }
    }
  }
  
  // Add event listeners to "Add" buttons
  const addButtons = document.querySelectorAll(".add-button");
  addButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const itemText = this.parentElement.querySelector("p").textContent;
      addItemToDynamicList(itemText);
    });
  });
  
  // Add event listeners to "Remove" buttons
  const removeButtons = document.querySelectorAll(".remove-button");
  removeButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const itemText = this.parentElement.querySelector("p").textContent;
      removeItemFromDynamicList(itemText);
    });
  });
  