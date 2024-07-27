/**
 * // Page dynamique pour les posts

import { useRouter } from 'next/router';

const Post = () => {
  const router = useRouter();
  const { id } = router.query;

  return (
    <div>
      <h1>Post {id}</h1>
      <p>Détails du post avec ID : {id}</p>
    </div>
  );
};

export default Post;

 */