使用した技術
フロント:Bootstrap
言語:PHP Javascript jQuery
フレームワーク:Laravel
DB:MySQL
インフラ:AWS(EC2)

$post = Post::findOrFail($request->id);
$post->delete();
を
$post = Post::findOrFail($request->id)->delete();
に変更
