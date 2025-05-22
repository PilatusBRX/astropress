export interface ProjetoProps {
  id: number;
  date: string;
  slug: string;
  link?: string; // URL do WordPress
  title: {
    rendered: string;
  };

  featured_media?: number;
  featured_media_url?: string;
  _embedded?: {
    "wp:featuredmedia"?: Array<{
      source_url: string;
      alt_text?: string;
      media_details?: {
        sizes?: {
          medium?: {
            source_url: string;
          };
          large?: {
            source_url: string;
          };
          thumbnail?: {
            source_url: string;
          };
        };
      };
    }>;
  };
  acf: {
    nome_do_cliente: string;
    data_de_entrega: string;
    logo_do_cliente?: {
      url: string;
      alt?: string;
      sizes?: {
        medium?: string;
        large?: string;
        thumbnail?: string;
      };
    };
    site_do_cliente?: {
      url: string;
      title?: string;
      target?: string;
    };
    galeria?: Array<{
      url: string;
      alt?: string;
    }>;
    
  };
  
}