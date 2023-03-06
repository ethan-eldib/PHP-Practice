export function simulateTyping(element, text) {
     let i = 0;
     const interval = setInterval(() => {
         if (text[i] === "<") {
             const endIndex = text.indexOf(">", i);
             element.innerHTML += text.slice(i, endIndex + 1);
             i = endIndex + 1;
         }else if (text[i] === " ") {
             element.innerHTML += "&nbsp;";
             i++;
         }  else {
             element.innerText += text[i];
             i++;
         }
         if (i >= text.length) {
             clearInterval(interval);
         }
     }, 8);
 }