 <div id="example" class="k-content">
      <h2>
        Create a news item
      </h2>
      <?php echo validation_errors(); ?>
      
      
      
      
      <?php echo form_open('news/create') ?>
      <label for="title">
        Title
      </label>
    </br>
	
  
  <textarea id="" name="title" rows="10" cols="30" style="width:100%;height:20px" required="required">
    
  </textarea>
  <br/>
  
  
  <textarea id="editor" name="text" rows="10" cols="30" style="width:100%;height:400px" required="required">
    
  </textarea>
  <br/>
  
  
  
  
  <input type="submit" name="submit" value="Create news item" />
  <script>
    $("#editor").kendoEditor({
      tools: [
        "bold",
        "italic",
        "underline",
        "strikethrough",
        "justifyLeft",
        "justifyCenter",
        "justifyRight",
        "justifyFull",
        "insertUnorderedList",
        "insertOrderedList",
        "indent",
        "outdent",
        "createLink",
        "unlink",
        "insertImage",
        "subscript",
        "superscript",
        "createTable",
        "addRowAbove",
        "addRowBelow",
        "addColumnLeft",
        "addColumnRight",
        "deleteRow",
        "deleteColumn",
        "viewHtml",
        "formatting",
        "fontName",
        "fontSize",
        "foreColor",
        "backColor"
      ]
    }
                            );
  </script>
  
  
  </form>
  
  
</div>
