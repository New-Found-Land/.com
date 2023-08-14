<?php
// Handle the attachment
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
  $attachmentPath = $_FILES['attachment']['tmp_name'];
  $attachmentName = $_FILES['attachment']['name'];

  // Save the attachment to a location accessible by the client
  move_uploaded_file($attachmentPath, 'path/to/save/' . $attachmentName);
  
  // Output the download URL or endpoint
  echo 'path/to/save/' . $attachmentName;
} else {
  echo 'Error: Attachment not found.';
}
?>
