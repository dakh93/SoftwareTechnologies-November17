namespace ASP.NET_Blog.Migrations
{
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Migrations;
    using System.Linq;

    public sealed class Configuration : DbMigrationsConfiguration<ASP.NET_Blog.Models.BlogDbContext>
    {
        public Configuration()
        {
            AutomaticMigrationsEnabled = true;
            AutomaticMigrationDataLossAllowed = true;
            ContextKey = "ASP.NET_Blog.Models.BlogDbContext";
        }

        protected override void Seed(ASP.NET_Blog.Models.BlogDbContext context)
        {
            
        }
    }
}
