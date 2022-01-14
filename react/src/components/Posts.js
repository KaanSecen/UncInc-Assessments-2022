import React from 'react';

const Posts = ({ posts, loading }) => {
  if (loading) {
    return <h2>Loading....</h2>;
  }

  return (
    <ul className='list-group mb-4'>
      {posts.map(post => (
        <li key={post.id} className='list-group-item bg-light'>
          <p>Title: {post.title}</p>
          <p>Body: {post.body}</p>
          <p>ID: {post.id}</p>
        </li>
      ))}
    </ul>
  );
};

export default Posts;
