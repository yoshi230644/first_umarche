@props([
  'title',
  'message' => '初期値です。',
  'content' => '本文初期値です'
])
<div class="border-2 shadow-md w-/4 p-4">
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>