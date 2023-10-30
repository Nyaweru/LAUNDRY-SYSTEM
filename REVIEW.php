<!DOCTYPE html>
<html>
<head>
	<title>REVIEW AND RATE</title>
	<style>
		/* Style for top1 bar */
		#top1 {
			background-color: whitesmoke;
			color: blue;
			display: flex;
			align-items: center;

			justify-content: space-evenly;
			padding: 10px;
		}

		/* Style for bottom1 bar */
		#bottom1 {
			background-color: beige;
			display: flex;
		flex-direction: column;
			align-items: center;
			padding: 10px;
		}

		/* Style for chatbot */
	#chatbot-frame {
            width: 50%;
            height: 100%;
            float:right;
            border: 1px solid #ccc;
            background-color: aqua;
        }
		/* Style for rate container */
		#rate-container {
			display: inline-block;
	
    margin-left: 5px;
    margin-right: 5px;
			margin-bottom: 10px;
      margin-top: 10px;
		}
  
        
        #rateus-frame {
            width: 50%;
            height: 100%;
            display: flex;
            
        }
		/* Style for review form */
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-bottom: 10px;
		}
    </style>
</head>
<body>
    <!-- Top1 bar -->
    <div id="top1">
        <h1>STEGAM LAUNDRY SERVICES</h1>
    
        <a href="ABOUT.php" class="blink-button">ABOUT</a>
    <a href="BOOK.php" class="blink-button">BOOK</a>
    
  <a href="index.php" class ="blink-button">HOME</a>
    <a href="INSIDER.php" class ="blink-button">ADMIN</a>
    <a href="TIME CARD.php" class ="blink-button">EMPLOYEE</a>
            
        </div>
    </div>

    <!-- Bottom1 bar -->
    <div id="bottom1">
    <div id="chatbot-frame">
        <h2>Chatbot</h2>
        <div id="chat-container">
            <!-- Chatbot content will be displayed here -->
        </div>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
    </div>

    <div id="rateus-frame">
        <h2>Rate Us</h2>
        <div id="rate-container">
            <style>
                input[type="radio"] {
                  display: none;
                }
              
                label {
                  font-size: 30px;
                  color: #ccc;
                  cursor: pointer;
                }
              
                label:hover,
                label:hover ~ label {
                  color: #ffcc00;
                }
              
                input[type="radio"]:checked ~ label {
                  color: #ffcc00;
                }
              </style>
              <form>
              
                <input type="radio" name="rating" id="star-5" value="5">
                <label for="star-5">★BEST</label>
              
                <input type="radio" name="rating" id="star-4" value="4">
                <label for="star-4">★</label>
              
                <input type="radio" name="rating" id="star-3" value="3">
                <label for="star-3">★ </label>
              
                <input type="radio" name="rating" id="star-2" value="2">
                <label for="star-2">★</label>
              
                <input type="radio" name="rating" id="star-1" value="1">
                <label for="star-1">★POOR</label>
              </form>
              </div>
    </div>
    </div>
              <script>
        function sendMessage() {
            var userInput = document.getElementById("user-input").value;
            var chatContainer = document.getElementById("chat-container");
            
            // Display user's message
            chatContainer.innerHTML += "<p>You: " + userInput + "</p>";
            
            // Simulate a chatbot response (you can replace this with a real chatbot logic)
            var chatbotResponse = "Chatbot: Thanks for your message! How can I assist you?";
            chatContainer.innerHTML += "<p>" + chatbotResponse + "</p>";
            
            // Clear user input
            document.getElementById("user-input").value = "";
        }
    </script>
     <div>
     <form onsubmit="return false;">
            <label for="review">Write a review:</label>
            <textarea id="review"></textarea>
            <button onclick="submitReview()">Submit</button>
        </form>
    </div>
     </div>   
</body>
</html>







