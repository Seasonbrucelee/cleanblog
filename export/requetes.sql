-- Page home
 SELECT post_ID, post_date, LEFT(post_content, " .TRONCATURE . ") AS post_content, post_title, display_name, cat_descr
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id
    
    ORDER BY post_date DESC;

-- PAGE POST 

SELECT  post_date, post_content, post_title, display_name, cat_descr
FROM blog_posts
    
INNER JOIN blog_users
ON post_author = ID
    
INNER JOIN blog_categories
ON post_category = cat_id
    
WHERE post_ID = 