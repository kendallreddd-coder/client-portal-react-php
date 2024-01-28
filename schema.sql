CREATE TABLE client_documents (
  doc_id BIGSERIAL PRIMARY KEY,
  org_id INT NOT NULL,
  category VARCHAR(30) NOT NULL,
  filename VARCHAR(255) NOT NULL,
  created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);
