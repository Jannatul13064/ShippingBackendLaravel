const dropdownBtn = document.querySelectorAll(".dropdown_btn");
const dropdown = document.querySelectorAll(".dropdown");

for (let i = 0; i < dropdownBtn.length; i++) {
  const btn = dropdownBtn[i];
  btn.addEventListener("click",()=>{
    dropdown[i].classList.toggle("dropdown_show");
    btn.classList.toggle("arrow_rotate");
  })
}


const subDropdownBtn = document.querySelectorAll(".sub_dropdown_btn");
const subDropdown = document.querySelectorAll(".sub_dropdown");

for (let i = 0; i < subDropdownBtn.length; i++) {
  const btn = subDropdownBtn[i];
  btn.addEventListener("click",()=>{
    subDropdown[i].classList.toggle("sub_dropdown_show");
    btn.classList.toggle("arrow_rotate");
  })
}