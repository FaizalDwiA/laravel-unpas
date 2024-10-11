public function store(Request $request)
{
$validatedData = $request->validate([
'title' => 'required|max:255',
'slug' => 'required|unique:posts',
'category_id' => 'required',
'body' => 'required'
]);
}