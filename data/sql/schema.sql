CREATE TABLE blog_comment (id BIGINT AUTO_INCREMENT, entry_id BIGINT NOT NULL, body TEXT NOT NULL, INDEX entry_id_idx (entry_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE blog_entry (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, body TEXT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE blog_comment ADD CONSTRAINT blog_comment_entry_id_blog_entry_id FOREIGN KEY (entry_id) REFERENCES blog_entry(id) ON DELETE CASCADE;
