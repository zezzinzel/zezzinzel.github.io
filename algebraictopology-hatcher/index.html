<?php $questionImages = glob('questions/*.png'); ?>
<?php $solutionPdfs = glob('solutions/*.pdf'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> Algebraic Topology - Pierre Albin </title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

        .title {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            font-size: 40px
        }

		.container {
			width: 80%;
			margin: 0 auto;
			padding: 20px;
			background-color: rgba(128, 128, 128, 0.2);
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

		.chapter-item {
			background-color: rgba(255, 255, 255, 0.8);
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
			cursor: pointer;
		}

		.question-item {
			background-color: rgba(255, 255, 255, 0.8);
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
		}

		.solution-list {
			list-style: none;
			padding: 0;
		}

		.solution-item {
			margin-bottom: 5px;
		}

		.add-solution {
			margin-top: 10px;
		}

		.add-solution label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		.add-solution input[type="file"] {
			margin-bottom: 5px;
		}

		.add-solution input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 5px 10px;
			border-radius: 5px;
			cursor: pointer;
		}

		.add-solution input[type="submit"]:hover {
			background-color: #3e8e41;
		}
        .collapsed {
          display: none;
        }

	</style>
</head>
<body>
    <div class="title" id="page-title"> Algebraic Topology - Pierre Albin </div>
	<div class="container" id="question-list"></div>
	<script>
	    var images = <?php echo json_encode($questionImages); ?>;
	    var solutions = <?php echo json_encode($solutionPdfs); ?>;

	    function populateChapters() {
		    var questionList = document.getElementById("question-list");
		    var chapters = {};

		    // Fetch all png files in the questions folder
		    for (var i = 0; i < images.length; i++) {
		      var src = images[i];
		      var parts = src.split("-")[1].replace(".png", "").split("_");
		      var chapterNum = src.split("-")[0].replace("questions/ch", "");
		      var questionNum = parts[0];
		      if (parts.length > 1) {
		        for (var j = 1; j < parts.length; j++) {
		          questionNum += "." + parts[j];
		        }
		      }
		      if (!chapters[chapterNum]) {
		        chapters[chapterNum] = {
		          questions: []
		        };
		      }
		      questionNum = questionNum.replace(/^q/, ''); // remove 'q' prefix
		      chapters[chapterNum].questions.push(questionNum);
		    }

		    // Generate the HTML for the question list
          var html = "";
          for (var chapterNum in chapters) {
            if (chapters.hasOwnProperty(chapterNum)) {
              html += `
                <div class="chapter-item">
                  <h3>Chapter ${chapterNum}</h3>
                  <div class="question-list collapsed" id="chapter${chapterNum}">
              `;

              for (var i = 0; i < chapters[chapterNum].questions.length; i++) {
                var questionNum = chapters[chapterNum].questions[i];
                html += `
                  <div class="question-item">
                    <h4 class="question-header">Question ${questionNum}</h4>
                    <div class="question-content">
                      <img style="max-width:80%; max-height:80%;" src="questions/ch${chapterNum}-q${questionNum}.png" alt="Question ${chapterNum}.${questionNum} Image">
                      <ul class="solution-list">
                        ${getSolutionsForQuestion(chapterNum, questionNum)}
                      </ul>
                      <div class="add-solution">
                        <form action="upload_solution.php" method="post" enctype="multipart/form-data">
                          <label for="name">Your Name:</label>
                          <input type="text" name="author" id="author">
                          <br>
                          <label for="solution">Add solution:</label>
                          <input type="file" name="solution" id="solution">
                          <input type="hidden" name="chapter" value="${chapterNum}">
                          <input type="hidden" name="question" value="${questionNum}">
                          <input type="submit" value="Upload">
                        </form>
                      </div>
                    </div>
                  </div>
                `;
              }
              html += `
                  </div>
                </div>
              `;
            }
          }

		    // Set the HTML of the question list and add collapsible behavior to the chapters and questions
            questionList.innerHTML = html;
            var chapterItems = document.querySelectorAll(".chapter-item");
            for (var i = 0; i < chapterItems.length; i++) {
                var chapterItem = chapterItems[i];
                var chapterHeader = chapterItem.querySelector("h3");
                chapterHeader.addEventListener("click", function() {
                    var chapterContents = this.nextElementSibling;
                    var questionContents = chapterContents.querySelectorAll(".question-content");
                    for (var j = 0; j < questionContents.length; j++) {
                        var questionContent = questionContents[j];
                        questionContent.classList.add("collapsed");
                    }
                    chapterContents.classList.toggle("collapsed");
                });
            }

            var questionItems = document.querySelectorAll(".question-item");
            for (var i = 0; i < questionItems.length; i++) {
                var questionItem = questionItems[i];
                var questionHeader = questionItem.querySelector(".question-header");
                questionHeader.addEventListener("click", function() {
                    var questionContents = this.nextElementSibling;
                    questionContents.classList.toggle("collapsed");
                    });
            }
	    }

		function getSolutionsForQuestion(chapter, question) {
            var solutionsList = ''
            for (var i = 0; i < solutions.length; i++) {
                var fileName = solutions[i].split('/')[1].split('.pdf')[0];
                var solutionAuthor = fileName.split('-')[2];
                var solutionCh = fileName.split('-')[0].split('ch')[1].split('q')[0];
                var solutionQ = fileName.split('-')[1].split('q')[1].replace('_', '.');
                if (chapter == solutionCh && question == solutionQ) {
                    var fullUrl = document.currentScript.src;
                    solutionsList += `<li class="solution-item">${solutionAuthor} - <a href="${fullUrl}" download="${fileName}">Download solution</a></li>`;
                }
            }
            return solutionsList;
        }

		// Call the populateChapters function to generate the question list
		populateChapters();
</script>
</body>
</html>
