function selectFlag() {
  const languageFlags = document.querySelectorAll(".language-flag");

  languageFlags.forEach((flag) =>
    flag.addEventListener("click", () => {
      languageFlags.forEach((f) => f.classList.remove("selected"));
      flag.classList.add("selected");
      setLanguage(flag.id);
    })
  );
}

function highlightFlag() {
  const selectedLanguage = getLanguage() || "tr-flag";
  const selectedFlag = document.getElementById(selectedLanguage);
  selectedFlag.classList.add("selected");
}

function getLanguage() {
  return localStorage.getItem("selectedLanguage");
}

function setLanguage(language) {
  localStorage.setItem("selectedLanguage", language);
}
