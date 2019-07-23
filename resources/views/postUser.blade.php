<?php if ($userPost) : foreach($userPost as $Post): ?>
    <tr>
        <td>{{ $Post->username}}</td>
        <td>{{ $Post->title}}</td>
        <td>{{ $Post->description}}</td>
        <td>
            <a href="post/<?php echo $Post['id']?>/edit">edit</a>
            
        </td>
        <td><a href="post/<?php echo $Post['id']?>/delete ">delete</a></td>
    </tr>
<?php endforeach; endif; ?>