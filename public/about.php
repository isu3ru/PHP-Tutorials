<?php 
// start a session
session_start(); 
session_regenerate_id();

// to remove a cookie, we have to expire it.
setcookie('LOGIN_TOKEN', '', time() - 300);

//logout - destroy current session data
// $_SESSION = [];
// setcookie(session_name(), '', time() - 42000);

// if (!array_key_exists('user_id', $_SESSION)) {
// 	die('Please log in. You are not authorized to view this page.');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
</head>
<body>
	<h1>About Us</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus natus facere recusandae, laudantium totam officiis cum, possimus sint vero blanditiis labore odit doloribus eligendi in tempora magni eaque. Asperiores, soluta.</p>
	<p>Ab unde recusandae delectus error earum, eligendi mollitia dolorum ipsum modi in accusamus quod necessitatibus animi maiores culpa, iusto optio minus a facilis libero, laboriosam fuga dicta. Et, dolores? Quas.</p>
	<p>Inventore ab eaque eligendi fugit culpa illo sunt, consectetur modi consequuntur explicabo error consequatur, odit praesentium quibusdam adipisci tenetur vel doloribus nam rem. Commodi dolores unde, sapiente dolore voluptatem architecto.</p>
	<p>Ipsa rem vel sunt aut voluptates similique eius voluptas fugit eligendi possimus in eos aliquid ullam harum ex adipisci doloremque, dolorem impedit est, distinctio quam tempora ipsam nisi error. Harum!</p>
	<p>Dolorem ducimus, explicabo alias quam soluta voluptas accusantium facere asperiores, dolore omnis ut harum praesentium aliquam sapiente quidem animi dolorum cum quos, culpa est molestias eum obcaecati natus. Omnis, deserunt!</p>
	<p>Laudantium, odit assumenda quasi veniam labore nihil, nostrum corporis optio maxime itaque alias adipisci ipsum facilis dolorum sint iure libero, aspernatur commodi. Laudantium, qui eligendi dolorem commodi dolor non quo.</p>
	<p>Reprehenderit assumenda earum id nam voluptas consequuntur aspernatur praesentium, excepturi fugit perferendis beatae! Unde, aspernatur accusamus non impedit quae, mollitia laborum qui eligendi, blanditiis assumenda debitis officiis sint repudiandae necessitatibus?</p>
	<p>Nihil voluptas repellendus suscipit enim aspernatur a aut nulla commodi inventore laboriosam placeat sed ea delectus consequatur expedita optio ipsam impedit unde, est maxime rem eligendi omnis. Unde sunt, ratione.</p>
	<p>Ex nemo repudiandae reprehenderit temporibus aut beatae, laudantium explicabo harum animi incidunt quam. Necessitatibus voluptatibus sapiente placeat, expedita dolorem, fugit officiis blanditiis molestiae eveniet culpa sit at aliquam, obcaecati qui!</p>
	<p>Perspiciatis esse, eum, labore in eveniet, nam modi dolorem consequuntur asperiores ipsam nulla fugiat consequatur suscipit magni voluptas voluptatem! Facere alias eius repellat blanditiis iusto, illo ab beatae eveniet nisi.</p>
	<p>Cupiditate vero aliquam hic esse doloremque, minus veniam error, reprehenderit, illum eaque et earum harum ducimus iure quia sunt tempore? Nostrum distinctio minima perferendis obcaecati accusantium tempore asperiores vero. Aut?</p>
	<p>Ipsum pariatur sed iusto est quos error eum aliquam odio aperiam consequuntur, doloremque inventore repellendus dolorem quia cum reiciendis fuga corporis ducimus repellat quis, magnam vero libero, maiores? Distinctio, deserunt.</p>
	<p>In sed laborum deserunt vel corporis veniam et expedita nam reiciendis, dolore nesciunt ad ullam fugiat veritatis facilis cupiditate dolorum a maxime nemo id fugit, odio quibusdam. Possimus, delectus, praesentium.</p>
	<p>Cumque ut impedit quasi pariatur architecto cupiditate alias omnis. Totam facere natus deleniti ut facilis obcaecati, delectus aperiam, molestias cupiditate accusantium doloremque quis! Nemo aspernatur, modi optio distinctio facilis nostrum.</p>
	<p>Architecto deserunt, est. Facere impedit mollitia nemo placeat vero, blanditiis dolore dolorum modi fugiat eveniet in velit dolor amet dolorem? Aut, aliquam asperiores, nisi eaque quae ullam omnis nobis est.</p>
	<p>Provident in quaerat rem recusandae facilis, dicta iste libero, neque delectus natus, quas odio nam ut debitis consectetur suscipit. Quas odit suscipit maiores quo vero illo quod, aperiam velit accusantium.</p>
	<p>Impedit similique obcaecati soluta enim cupiditate earum delectus perspiciatis natus unde, asperiores, ut quam, eligendi nobis non, cumque placeat temporibus iusto beatae ipsa nam. Maiores ut maxime non. Aut, autem?</p>
	<p>Necessitatibus animi sed dignissimos maiores harum ut nisi quod dolor sunt. Error perferendis enim hic dolores vel dolor, soluta aliquam, rerum eligendi alias ab quidem itaque velit fugiat quibusdam impedit.</p>
	<p>Harum commodi minus ducimus, nihil nam, quo tenetur cumque. Dolorum eius maxime optio culpa deserunt, dolores, adipisci alias assumenda, quisquam sapiente voluptas beatae. Error, quasi, esse. Sit, id harum voluptas.</p>
	<p>Placeat, possimus laboriosam voluptate voluptatum rerum culpa atque. Hic, quam, eos. Facilis ducimus labore aliquid impedit ipsa, vitae vero laudantium consequuntur. Eos, nemo, sunt! Non magni possimus inventore sint beatae.</p>

	<footer>
		<p>Copyrights Reserved - <?php echo date('Y'); ?>. Last updated at <?php echo date('Y-m-d h:i a') ?></p>
	</footer>
</body>
</html>
