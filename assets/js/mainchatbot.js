const chatInput = document.querySelector(".chat-input textarea");
const sendButton = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");
let userMessage;

const createChatLi = (message, className) => {
  const chatLi = document.createElement("li");
  chatLi.classList.add("chat", className);
  let chatContent = className === "outgoing" ?  '<p> {$message}</p>' : '<p><span class="material-symbols-outlined"></span> {$message}</p>';
  chatLi.innerHTML = chatContent;
  return chatLi;
}

const handleChat = () => {
userMessage = chatInput.value.trim();
console.log(userMessage);
if(!userMessage) return;

chatbox.appendChild(createChatLi(userMessage, "outgoing"));

}
sendButton.addEventListener("click", handleChat);

